@extends('layouts.front')
@section('title', '甘酒検索方法')
@section('content')
  <map name="image-map">
    <area target="_self" alt="北海道" title="北海道" href="{{url('search/japan/1')}}" coords="597,5,594,160,650,161,652,141,810,137,809,9" shape="poly" >
    <area target="_self" alt="青森県" title="青森県" href="{{url('search/japan/2')}}" coords="594,184,593,229,750,231,750,185" shape="poly">
    <area target="_self" alt="岩手県" title="岩手県" href="{{url('search/japan/3')}}" coords="674,236,674,291,751,291,749,235" shape="poly">
    <area target="_self" alt="宮城県" title="宮城県" href="{{url('search/japan/4')}}" coords="673,294,674,351,751,350,750,294" shape="poly" style="">
    <area target="_self" alt="福島県" title="福島県" href="{{url('search/japan/5')}}" coords="625,353,624,413,750,409,751,354" shape="poly">
    <area target="_self" alt="山形県" title="山形県" href="{{url('search/japan/6')}}" coords="593,293,594,331,627,331,624,351,672,350,670,295" shape="poly">
    <area target="_self" alt="秋田県" title="秋田県" href="{{url('search/japan/7')}}" coords="594,233,670,234,670,290,594,291" shape="poly">
    <area target="_self" alt="東京都" title="東京都" href="{{url('search/japan/8')}}" coords="623,524,625,571,680,570,681,553,712,551,712,523" shape="poly">
    <area target="_self" alt="埼玉県" title="埼玉県" href="{{url('search/japan/9')}}" coords="594,473,595,521,711,519,711,475" shape="poly">
    <area target="_self" alt="神奈川県" title="神奈川県" href="{{url('search/japan/10')}}" coords="595,575,680,573,682,632,625,635,625,602,595,601" shape="poly">
    <area target="_self" alt="千葉県" title="千葉県" href="{{url('search/japan/11')}}" coords="714,495,749,495,751,631,714,631" shape="poly">
    <area target="_self" alt="茨城県" title="茨城県" href="{{url('search/japan/12')}}" coords="714,414,714,491,751,492,751,416" shape="poly">
    <area target="_self" alt="栃木県" title="栃木県" href="{{url('search/japan/13')}}" coords="654,414,654,471,711,470,711,415" shape="poly">
    <area target="_self" alt="群馬県" title="群馬県" href="{{url('search/japan/14')}}" coords="594,415,651,414,651,471,596,469" shape="poly">
    <area target="_self" alt="新潟県" title="新潟県" href="{{url('search/japan/15')}}" coords="543,353,544,411,620,412,623,334,594,334,594,353" shape="poly">
    <area target="_self" alt="長野県" title="長野県" href="{{url('search/japan/16')}}" coords="523,414,525,570,561,571,562,522,593,522,591,415" shape="poly">
    <area target="_self" alt="山梨県" title="山梨県" href="{{url('search/japan/17')}}" coords="566,524,564,572,622,572,621,525" shape="poly">
    <area target="_self" alt="静岡県" title="静岡県" href="{{url('search/japan/18')}}" coords="543,575,544,630,622,634,621,603,593,603,593,577" shape="poly">
    <area target="_self" alt="愛知県" title="愛知県" href="{{url('search/japan/19')}}" coords="483,575,483,629,540,631,539,574" shape="poly">
    <area target="_self" alt="岐阜県" title="岐阜県" href="{{url('search/japan/20')}}" coords="483,415,485,573,521,571,520,415" shape="poly">
    <area target="_self" alt="富山県" title="富山県" href="{{url('search/japan/21')}}" coords="484,355,484,411,540,410,540,353" shape="poly">
    <area target="_self" alt="石川県" title="石川県" href="{{url('search/japan/22')}}" coords="444,335,443,410,481,412,481,336" shape="poly">
    <area target="_self" alt="福井県" title="福井県" href="{{url('search/japan/23')}}" coords="444,415,443,433,406,436,403,472,480,472,480,416" shape="poly">
    <area target="_self" alt="滋賀県" title="滋賀県" href="{{url('search/japan/24')}}" coords="443,476,443,529,480,531,480,475" shape="poly">
    <area target="_self" alt="三重県" title="三重県" href="{{url('search/japan/25')}}" coords="444,534,482,534,480,672,444,671" shape="poly">
    <area target="_self" alt="奈良県" title="奈良県" href="{{url('search/japan/26')}}" coords="403,535,404,632,441,632,440,534" shape="poly">
    <area target="_self" alt="和歌山県" title="和歌山県" href="{{url('search/japan/27')}}" coords="364,604,400,604,401,634,441,635,440,671,366,671" shape="poly">
    <area target="_self" alt="大阪府" title="大阪府" href="{{url('search/japan/28')}}" coords="363,535,365,600,400,602,400,536" shape="poly">
    <area target="_self" alt="京都府" title="京都府" href="{{url('search/japan/29')}}" coords="363,434,364,532,439,530,439,477,400,473,401,434" shape="poly">
    <area target="_self" alt="兵庫県" title="兵庫県" href="{{url('search/japan/30')}}" coords="324,434,323,548,360,551,360,437" shape="poly">
    <area target="_self" alt="鳥取県" title="鳥取県" href="{{url('search/japan/31')}}" coords="284,436,285,489,320,491,320,436" shape="poly">
    <area target="_self" alt="島根県" title="島根県" href="{{url('search/japan/32')}}" coords="246,434,245,491,282,490,281,434" shape="poly">
    <area target="_self" alt="山口県" title="山口県" href="{{url('search/japan/33')}}" coords="206,438,203,551,242,550,241,436" shape="poly">
    <area target="_self" alt="広島県" title="広島県" href="{{url('search/japan/34')}}" coords="244,495,245,548,281,553,280,496" shape="poly">
    <area target="_self" alt="岡山県" title="岡山県" href="{{url('search/japan/35')}}" coords="285,495,319,496,320,551,283,549" shape="poly">
    <area target="_self" alt="香川県" title="香川県" href="{{url('search/japan/36')}}" coords="275,577,274,619,340,622,340,575" shape="poly">
    <area target="_self" alt="徳島県" title="徳島県" href="{{url('search/japan/37')}}" coords="275,626,274,668,340,672,339,626" shape="poly">
    <area target="_self" alt="愛媛県" title="愛媛県" href="{{url('search/japan/38')}}" coords="205,577,207,621,270,619,270,575" shape="poly">
    <area target="_self" alt="高知県" title="高知県" href="{{url('search/japan/39')}}" coords="204,626,204,668,271,672,270,625" shape="poly">
    <area target="_self" alt="福岡県" title="福岡県" href="{{url('search/japan/40')}}" coords="87,438,84,519,139,521,143,471,181,471,179,434" shape="poly">
    <area target="_self" alt="大分県" title="大分県" href="{{url('search/japan/41')}}" coords="145,476,144,542,180,541,180,478" shape="poly">
    <area target="_self" alt="宮崎県" title="宮崎県" href="{{url('search/japan/42')}}" coords="145,545,144,610,181,611,179,545" shape="poly">
    <area target="_self" alt="熊本県" title="熊本県" href="{{url('search/japan/43')}}" coords="84,527,85,610,140,608,140,528" shape="poly">
    <area target="_self" alt="鹿児島" title="鹿児島県" href="{{url('search/japan/44')}}" coords="85,614,85,669,178,669,181,616" shape="poly">
    <area target="_self" alt="佐賀県" title="佐賀県" href="{{url('search/japan/45')}}" coords="45,435,43,521,81,521,82,437" shape="poly">
    <area target="_self" alt="長崎県" title="長崎県" href="{{url('search/japan/46')}}" coords="5,434,7,520,39,523,42,434" shape="poly">
    <area target="_self" alt="沖縄県" title="沖縄県" href="{{url('search/japan/47')}}" coords="85,697,84,749,120,748,121,694" shape="poly">
  </map>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center"><img src="{{ secure_asset('image/map-japan-deform-prefecture-01.png') }}" usemap="#image-map" class="mx-5"></div>
      </div>
    </div>
  </div>
<div class="py-2">
    <div class="container">
      <div class="row">
            <div class="list-news col-md-12 mx-auto">
              <form action="{{ action('AmazakeController@japan') }}" method="get">
                <div class="table-responsive">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th width="10%"><input class="btn btn-ligft" type="submit" name="amazake" value="甘酒名"></th>
                        </thead>
                        <tbody>
                          <tr>
                          @if ($posts == NULL)
                          <td>登録されていません</td>
                          @else
                            @foreach($posts as $amazake)
                                    <td>{{ \Str::limit($amazake->amazake, 100) }}</td>
          　　　</form>
                                      <td>
                                        <div>
                                            <a href="{{ action('AmazakeController@open',['id' => $amazake->id]) }}">見てみる</a>
                                        </div>
                                      </td>
                                </tr>
                            @endforeach
                            {{ $posts->links() }}
                            @endif
                            
                        </tbody>
                    </table>
                </div>
              
            </div>
      </div>
    </div>
  </div>
  
@endsection  