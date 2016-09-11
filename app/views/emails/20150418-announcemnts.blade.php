@extends('layouts.email')
@section('content')
				<tr>
					<td>
						<h3>ராதே கிருஷ்ணா,</h3>
						<p class="alert">Please add <a href="mailto:srisriannaorg@gmail.com">srisriannaorg@gmail.com</a> to your address book to avoid flagging messages from Sri Sri Anna as SPAM.
						@if (isset($preference))
							Please <a href="{{ $preference }} ">unsubscribe or update your preference</a> to receive relevant emails from Sri Sri Anna
						@endif
						</p>
						<p class="info">Please check & Subscribe <a href="http://srisrianna.com/upcoming-events">Upcoming Events</a>. The Calendar will be frequently updated with date wise details.</p>
                        <table>
                         <tr>
                           <td>
														<section class="post_content clearfix">
														      <h3><strong>செய்திகள்</strong></h3>
														<p><strong><em>உபநயனம், பரனூர்</em></strong>.</p>
														<p>01-06-2015 அன்று சிரஞ்சீவி ராஜகோபாலனுக்கு பரனூர் ஶ்ரீ பக்த கோலாஹலனின் ஸ்ன்னிதியில் ப்ரம்ஹோபதேச உபநயனகமும், அதை முன்னிட்டு நமது ஸங்கத்து பிள்ளைகளுக்கு ஸமஷ்டி உபநயனமும் நடைபெறும்.</p>
														<h3><strong>ப்ரவசனங்கள்</strong></h3>
														<p><em><strong>திருக்கல்யாணம், ஶ்ரீ ப்ருந்தாவனம்</strong></em></p>
														<p>24-04-2015 முதல் 03-05-2015 வரை ஶ்ரீ ப்ருந்தாவனம் ப்ரேமமாதுரி குஞ்ஜத்தில் ஶ்ரீ ஹரி அண்ணா முன்னிலையில் புறப்பாடு, ப்ரவசனம், ராதாகல்யாணம் வழக்கம் போல் நடைபெறும்.</p>
														<p><em><strong>ஶ்ரீமத் பாகவத ஸப்தாஹம், அழகர் கோவில்</strong></em></p>
														<p>02-05-2015 முதல் 09-05-2015 வரை அழகர் சித்ரா பெளர்ணமி உத்ஸவத்தை முன்னிட்டு, திருமாலிருஞ்சோலை கூரத்தாழ்வான் பஜனாச்ரமத்தில் ஶ்ரீஶ்ரீ அண்ணாவின் பாகவத ஸ்பதாஹம் நடைபெறும்.</p>
														<h3><strong>உத்ஸவங்கள்</strong></h3>
														<p><em><strong>வஸந்தோத்ஸவம், பரனூர்</strong></em></p>
														<p>24-05-2015 முதல் 02-06-2015 வரை பரனூர் ஶ்ரீ பக்த கோலாஹலனின் வஸந்தோத்ஸவம் ஶ்ரீ அண்ணா முன்னிலையில் நடைபெறுகிறது. 02-05-2015 காலை முரளிதரன் திருமஞ்சனம், மாலை ஶ்ரீ பக்த கோலாஹலனின் வஸந்த கேளிகை, ஹோலி.</p>

														    </section>
							</td>
                          </tr>
                        </table>
                    </td>
				</tr>
@stop
