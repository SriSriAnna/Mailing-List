@extends('layouts.vsamhitha')
@section('content')
				<tr>
					<td>
						<h3>ராதே கிருஷ்ணா,</h3>
						<p class="alert">Please add <a href="mailto:srisriannaorg@gmail.com">srisriannaorg@gmail.com</a> to your address book to avoid flagging messages from Sri Sri Anna as SPAM.
						@if (isset($preference))
							Please <a href="{{ $preference }} ">unsubscribe or update your preference</a> to receive relevant emails from Sri Sri Anna
						@endif
						</p>
                        <table>
                         <tr>
                           <td>
														<h2>Moving to Google Groups</h2>
														<p>Google Group is created to send Announcements related to our beloved Sri Sri Anna, his programs, Vaishnava Samhita, Upadesa Mozhigal and others.</p>
														<p>Previous email communication faced with some SPAM issues where some of the devotees would have received their email to their SPAM folder due to some technical issues. Google groups should solve that issue.</p>
														<p>This group is announcement only for now, devotees cannot send messages to the group or other members. <b>Here after you should receive email from Google Groups</b></p>
														<p>Please join the group by Visiting <a href="https://groups.google.com/forum/#!forum/srisrianna">https://groups.google.com/forum/#!forum/srisrianna</a> and then click on <b><i>Subscribe to this group</i></b> to join and receive further announcements. If you already joined, please ignore.</p>																												<p>Please send your <a target = "_blank" href="http://groups.google.com/group/srisrianna/post?sendowner=1">Suggestions</a> related to Announcements and any other queries to <a href="mailto:srisriannaorg@gmail.com">srisriannaorg@gmail.com</a>.</p>
								</td>
                         </tr>
                        </table>
                    </td>
				</tr>
@stop
