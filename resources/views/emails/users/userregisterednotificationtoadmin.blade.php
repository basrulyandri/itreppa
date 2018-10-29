@component('mail::message')
# Pendaftaran Anggota

Data pendaftaran anggota baru

@component('mail::table')
| Kolom       | Data         |
| ------------- |:-------------:|
| Nama      | {{$user->profile->first_name}} {{$user->profile->last_name}}      |
| Email      | {{$user->email}} |
| Telpon      | {{$user->profile->phone}} |
| Agama      | {{$user->profile->agama}} |
| Jenis Kelamin      | {{$user->profile->jenis_kelamin}} |
| Alamat      | {{$user->profile->address}} |
|       |  |
|       |  |
| Nama Yayasan      | {{$user->profile->university->yayasan_name}} |
| Nama Perguruan Tinggi      | {{$user->profile->university->name}} |
| Nama Rektor      | {{$user->profile->university->rektor_name}} |
| Telpon      | {{$user->profile->university->phone}} |
| Website URL      | {{$user->profile->university->website_url}} |
| Alamat      | {{$user->profile->university->address}} |
@endcomponent

@component('mail::button', ['url' => route('page.index')])
Web APPERTI
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent

