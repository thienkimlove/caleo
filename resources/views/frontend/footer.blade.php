﻿<footer class="footer" id="footer">
    <div class="container">
        <div class="boxFooter clearFix">
            <div class="areaSocial">
                <ul class="listSocial clearFix">
                    <li><a href="https://www.google.com.vn/?gfe_rd=cr&ei=itHMV-DHNrPY8gfOkrLACA#q=gi%E1%BA%A3i+%C4%91%E1%BB%99c+gan+tu%E1%BB%87+linh" target="_blank" class="se">Search</a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PL6cgnq2l30jJhdUO50sOlMv3adPJ306R1" target="_blank" class="yu">Youtube</a></li>
                    <li><a href="https://www.facebook.com/viemgan.com.vn/" target="_blank" class="sk">Skype</a></li>
                    <li><a href="https://www.facebook.com/viemgan.com.vn/" target="_blank" class="go">googleplus</a></li>
                </ul>
            </div>
            <div class="areaLink">
                <ul class="listCategory clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    @foreach ($footerCategories as $category)
                        <li><a href="{{url($category->slug)}}">{{$category->name}}</a></li>
                    @endforeach
                    <li><a href="{{url('cau-hoi-thuong-gap')}}">CÂU HỎI THƯỜNG GẶP</a></li>
                    <li><a href="{{url('lien-he')}}">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container">
            <p class="copy">Hỗ trợ điều trị viêm gan vi rút, điều trị men gan cao, xơ gan<br />
          © 2016 Cà gai leo Tuệ Linh. Vui lòng ghi rõ nguồn khi sử dụng nội dung từ website này.</p>
      </div>
    </div>
</footer>