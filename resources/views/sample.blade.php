{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
{{-- <div class="container"> --}}
{{-- Vue コンポーネントにパラメータを渡す【 title, user_id】 --}}
{{-- <sample-component title={{ $title }} user_id={{ $user_id }} /> --}}
{{-- </div> --}}
{{-- @endsection --}}

<!DOCTYPE html>
<html lang="ja">

@include('layouts.vuehead')

<body>
  {{-- 共通logout部分 --}}
  @include('layouts.logout')

  <div id="app">
    <sample-component title={{ $title }} user_id={{ $user_id }} user_name={{ $user_name }} />
  </div>
</body>

</html>