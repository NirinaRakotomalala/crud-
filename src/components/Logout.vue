<template>
  <div class="lougin">
    <div class="wrapper">
      <section class="form login">
        <header>Realtime chat app</header>
        <form action="#" autocomplete="off">
          <div class="error-txt"></div>
          <div class="field input">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="Enter your E-mail" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input
              type="password"
              name="password"
              placeholder="Enter your Password"
            />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to chat" />
          </div>
        </form>
        <div class="link">
          Not yet signed up?<router-link to="login">Signup now</router-link>
        </div>
      </section>
    </div>
  </div>
</template>