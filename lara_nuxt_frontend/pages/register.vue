<template>
  <div class="container col-md-5 mt-5"><br>
    <h2 class="text-center">サインアップ</h2><br><br>
    <form>
      <div class="form-group">
        <label for="name">お名前</label>
        <input type="text" class="form-control" id="name"
               placeholder="takabo です  LA RA LAND をよろしくね！">
        <small class="form-text text-danger">show errors here</small>
      </div>
      <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email" class="form-control" id="email" placeholder="xxx@xxx.jp">
        <small class="form-text text-danger">show errors here</small>
      </div>
      <div class="form-group">
        <label for="password">パスワード</label>
        <input type="password" class="form-control" id="password" placeholder="半角6文字以上">
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
