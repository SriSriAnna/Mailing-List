<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Hugofirth\Mailchimp\Facades\MailchimpWrapper;

include_once('app/vendor/MailChimpExportAPI.class.php');
use ColumbiaLawSchool\Integration\Email\MailChimp\API\Export as MailChimpExport;

class announcement extends Command {

		/**
		* The console command name.
		*
		* @var string
		*/
		protected $name = 'mail:announce';

		/**
		* The console command description.
		*
		* @var string
		*/
		protected $description = "Send Announcements to Devotees";

		/**
		* Execute the console command.
		*
		* @return void
		*/
		public function fire() {

		$view = '20150323-Announcements';
		$title = 'Premika Vijyam & Kolahalan Prasadam';
		$app_key = 'MAILCHIMPKEY';
		$list_id = '27011330a0';
		$pref_url = 'http://srisrianna.us7.list-manage.com/profile?u=22d9e6eb35a769d1c7a0e03db&id=27011330a0&e=';
		$groupId = $this->argument('groupid');
		$link = "http://mail.srisrianna.com/".$view;


		$this->info("Howdy {$groupId}.");
		if ($groupId === "test") {
				$vars = array(
								'link' => $link,
								'title' => $title,
								'preference' => $pref_url.'9999',
								'email' => 'me@thiru.in',
								'Name' => "Thirumalai Veerasamy"
								);

				$this->info("Sending Test Email to info@thiru.in");
				Mail::queue('emails.'.$view, $vars, function($message) use ($vars) {
					$message->to($vars['email'], $vars['Name'])->subject($vars['title']);
				});
		} else {
			$export = new MailChimpExport($app_key);
			$level = error_reporting(0);
			$lists = $export->getList($list_id);
			usort($lists, array($this, 'sort_by_email'));
			error_reporting($level);
			$email_count = 0;
			foreach($lists as $list) {
				//print_r($list);
				if (property_exists($list, 'send_me_emails_for') && stristr($list->send_me_emails_for, $groupId)) {
					//print($list->email_address . "," . $list->first_name . "," . $list->last_name . "," .	 $list->euid . "\n");
					$email_count++;
					$vars =
						array(
								'link' => $link,
								'title' => $title,
								'preference' => $pref_url.$list->euid,
								'email' => $list->email_address,
								'Name' => $list->first_name . "," . $list->last_name
							);

					$this->info("Sending Email to " . $list->email_address . " For ". $list->first_name . "," . $list->last_name);
					Mail::queue('emails.'.$view, $vars, function($message) use ($vars) {
						$message->to($vars['email'], $vars['Name'])->subject($vars['title']);
					});
				}
			}
			print("\n".$email_count . ' Of '. sizeof($lists). " Mails sent\n");
		}
		}
	
	function sort_by_email($a, $b) {
		if ($a->email_address == $b->email_address) {
			return 0;
		}
		return ($a->email_address < $b->email_address) ? -1 : 1;
	}

	protected function getArguments() {
				return array(
						array('groupid', InputArgument::REQUIRED, 'Group Id Subscription, -1 will send test mail'),
				);
		}

}
