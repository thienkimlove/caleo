<footer class="footer" id="footer">
    <div class="infoFooter">
        <div class="fix">

            <div class="col-03">
                <h3>Hỗ trợ khách hàng</h3>
                <ul class="list-support">
                    <li><a href="#">Hệ thống cửa hàng</a></li>
                    <li><a href="#">Những câu hỏi thường gặp</a></li>
                    <li><a href="#">Phương thức thanh toán</a></li>
                    <li><a href="#">Hướng dẫn đặt hàng</a></li>
                    <li><a href="#">Giao nhận hàng</a></li>
                    <li><a href="#">Hướng dẫn đổi trả hàng</a></li>
                </ul>
            </div>

            <div class="col-03">
                <h3>Liên hệ</h3>
                <div class="list-contact">
                    <p>
                        Địa chỉ liên hệ <br>
                        <strong>Tại Hà Nội</strong> <br>
                        Địa chỉ: Tầng 5 tòa nhà 29T1, <br>
                        phố Hoàng Đạo Thúy, Trung Hòa, <br>
                        Cầu Giấy, Hà Nội <br>
                        ĐT: 04.62824344 <br>
                        Fax: 04.62824263 <br>
                    </p>
                    <p>
                        <strong>Chi nhánh TP. HCM</strong> <br>
                        Địa chỉ:156/17 Tô Hiến Thành. P15 Q10. <br>
                        TP.HCM <br>
                        ĐT: 083.9797779 <br>
                        Fax: 086.2646832 <br>
                        Đường dây nóng: 0912571190. <br>
                    </p>
                </div>
            </div>

            <div class="col-03">
                <div class="reg-sale">
                    <h3>
                        Đăng ký nhận khuyến mại
                        <p>Đăng ký khuyến mại từ Tue Linh</p>
                    </h3>
                    <form action="post" method="">
                        <input type="text" placeholder="Nhập địa chỉ email">
                        <button class="btn-send">Gửi</button>
                    </form>
                    <p>
                        Chúng tôi cam kết Địa chỉ: Tầng 5 tòa nhà 29T1, phố Hoàng Đạo Thúy, Trung Hòa cầu giấy hà nội
                    </p>
                </div>
            </div>

        </div>
    </div>
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