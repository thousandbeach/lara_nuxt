<template>
  <div class="container col-md-5 mt-5"><br>
    <h2 class="text-center">ログイン</h2><br><br>
    <form>
      <div class="form-group">
        <label for="">メールアドレス</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="xxx@xxx.jp">
        <small class="form-text text-danger">show errors here</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">パスワード</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="半角6文字以上">
        <small class="form-text text-danger">show errors here</small>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div><br><br>
      <div class="form-group">
        <p><button type="submit" class="btn btn-primary">ログイン
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;アカウントをお持ちでない方は<nuxt-link to="/register">こちら</nuxt-link></p>
      </div>
    </form><br>
  </div>
</template>
