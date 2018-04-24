@if ($dataArray['user']->company_location != NULL)
  <option value="{{ $dataArray['user']->company_location }}"> {{ $dataArray['user_country'] }} </option>
@else
<option value="-">Select a Country</option>
@endif
@foreach ($dataArray['country_list'] as $singleCountry => $cca2)
  <option value="{{ $cca2 }}"> {{ $singleCountry }} </option>
@endforeach
