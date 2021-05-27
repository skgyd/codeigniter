<div class="form-horizontal">
    <div class="modal-header">
        <h3>로그인</h3>
    </div>
    <form class="form-horizontal" action="/index.php/auth/authentication" method="post">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label" for="inputEmail">아이디</label>
                <div class="controls">
                    <input type="text" name="email" placeholder="이메일">
                </div>
            </div>
            <div class="control-group" style="margin-top: 10px;">
                <label class="control-label" for="inputPassword">비밀번호</label>
                <div class="controls">
                    <input type="password" name="password"  placeholder="비밀번호">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <input type="submit" class="btn btn-primary"  value="로그인" style="margin-top: 15px;" />
        </div>
    </form>
</div>