<x-backend.layouts.master>

            <x-slot name="pageTitle">
                Admin Dashboard
            </x-slot>

            <x-slot name='breadCrumb'>
                <x-backend.layouts.elements.breadcrumb>
                    <x-slot name="pageHeader"> Dashboard </x-slot>
                    <li class="breadcrumb-item active">Dashboard</li>
                </x-backend.layouts.elements.breadcrumb>
            </x-slot>

               {{-- notification --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               @php
                   $payment = DB::table('notifications')->where('name', auth()->user()->uuid)->where('status', 'unread')->get();
                //    dd($payment)
               @endphp

               @isset($payment)
                   @foreach ($payment as $item)
                        @php
                                 $payment_id = DB::table('users')->where('payment_id', $item->name)->get();
                                 $sponsor_id = DB::table('users')->where('sponsor_id', $item->name)->get();
                                //  dd($payment_id, $sponsor_id)

                           @endphp 
                           
                       <div class="alert alert-success" role="alert">
                           <h4 class="alert-heading">{{ $item->user_id }}</h4>
                           <p>{{ $item->message }}</p>
                           <hr>
                           <a type="button" class="btn btn-success"
                      
                            @if (isset($sponsor_id))
                                  href="{{ route('is_approved_sponsor_page',['id' => $item->id]) }}"
                            @elseif(isset($payment_id))
                                    href="{{ route('is_approved_payment_page',['id' => $item->id]) }}"
                            @elseif(isset($sponsor_id) && isset($payment_id))
                                    href="{{ route('is_approved_sponsor_payment_page',['id' => $item->id]) }}"
                            @endif
                           >Approved Request</a>
                           <a type="button" class="btn btn-danger" href="{{ route('is_rejected') }}">Decline Request</a>
                       </div>
                    
                   @endforeach
                   
               @endisset
            </div>
        </div>
    </div>
    {{-- end notification --}}

        </x-backend.layouts.master>