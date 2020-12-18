@php
$admin = false;

foreach(config('eclink.admin_emails') as $email) {
    if($email == \Illuminate\Support\Facades\Auth::user()->email) {
        $admin = true;
    }
}
@endphp

@if($admin == true)
    <x-dropdown-link :href="route('admin')">
        {{ __('Admin') }}
    </x-dropdown-link>
@endif
