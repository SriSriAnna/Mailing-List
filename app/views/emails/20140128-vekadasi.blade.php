@extends('layouts.email')
@section('content')
				<tr>
					<td>
						<h3>Radhe Krishna,</h3>
                        <table>
                         <tr>
                           <td>						
                               <h1>Vaikunta Ekadasi</h1>
                                <p>Sri Sri Anna placed Chadari to all the devotees who attended Vaikunta Ekadsi @ Paranur on 11th Jan 2014</p>
                                <table>
                                    <tr>
                                        <td class="padding">
                                        <p><a href="http://srisrianna.com/uthsavam/vaikunta-ekadasi-paranur/37845" class="btn-primary">
                                            View the Photos</a></p>
                                        </td>
                                    </tr>
                                </table>
                             </td>
                           <td valign="top"><img class="wpframe" src="{{{ isset($message) ? $message->embed(public_path().'/20140111_081958_5-638x300.jpg') : '20140111_081958_5-638x300.jpg' }}}" /></td>
                         </tr>
                        </table>
                        <table>
                         <tr>
                           <td>						
                               <h1>80th Jayanthi Mahabharatham DVD/MP3</h1>
                               <p>Sri Hari Traders have sufficient stock, those who are interested can contact through email to get it.</p>
                            <address>
                            <p><b>Sri Hari Traders</b></p>
                            <p>9, Moorthy Street</p>
                            <p>West Mambalam, Chennai- 600 033</p>
                            <p>Contact: Suresh Battar  </p>
                            <a href="mailto:sriharitraders108@gmail.com"></a>
                            </address>
                            <table>
                                <tr>
                                    <td class="padding">
                                    <p><a href="http://srisrianna.com/80th-jayanthi/80th-jayanthi-celebration/64" class="btn-primary">View Details</a></p>
                                    </td>
                                </tr>
                            </table>	                             
							</td>
                           <td valign="top"><img class="wpframe" src="{{{ isset($message) ? $message->embed(public_path().'/sri-sri-anna.png') : 'sri-sri-anna.png' }}}" /></td>
                         </tr>
                        </table>
				
                    </td>
				</tr>
@stop