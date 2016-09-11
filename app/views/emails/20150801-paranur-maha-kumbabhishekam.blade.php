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
														<h2>பரனூர் ஸம்ப்ரோஷண மற்றும் ஜீர்ணோத்தாரண மகா கும்பாபிஷேகம்</h2>
														<ul>
															<li>ஶ்ரீ லஷ்மி நாராயணப்பெருமாள் ஆலய ஸம்ப்ரோஷணம் – 20 ஆகஸ்டு முதல் 21 ஆகஸ்டு வரை</li>
															<li>ஶ்ரீ பக்தபுரீச்வரர் ஆலய ஜீர்ணோத்தாரண மகா கும்பாபிஷேகம் – 18 ஆகஸ்டு முதல் 20 ஆகஸ்டு வரை</li>
															<li>ஶ்ரீ ராதாரமண ஶ்ரீ பக்த கோலாஹலன் ஆலய ஜீர்ணோத்தாரண மகா கும்பாபிஷேகம் – 18 ஆகஸ்டு முதல் 20 ஆகஸ்டு வரை</li>
															</ul>
															<p>For Invitation Please Visit <a href="http://srisrianna.com/announcement/kumbabishekam/80818">Paranur Kumbabishekam</a></p>
								</td>
                         </tr>
                        </table>
                    </td>
				</tr>
@stop
