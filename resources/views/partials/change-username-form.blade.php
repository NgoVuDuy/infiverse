<form class="form-change-username" action="/change-username" method="post">

    @csrf


    <h5 class="mb-4">Đổi tên tài khoản</h5>

    <label for="" class="change-username-text">Tên tài khoản</label>
    <input type="text" name="username" id="" value="{{ Auth::user()->username }}"> <br>

    <button class="change-username-btn mt-3" type="submit">Lưu lại</button>

</form>