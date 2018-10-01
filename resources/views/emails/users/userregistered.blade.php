@component('mail::message')
# Selamat

Data pendaftaran anda sebagai anggota APPERTI berhasil terkirim ke email kami.

Tim kami akan menindaklanjuti pendaftaran anda.

@component('mail::button', ['url' => route('page.index')])
Web APPERTI
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
