<template>
	<div class="container">
		<nav class="menu" tabindex="0">
		<div class="smartphone-menu-trigger"></div>
			<header class="avatar">
				<h2>Larasample</h2>
			</header>
			<ul>
				<router-link tag="li" tabindex="0" class="icon-login" v-if="guest" to="/login"><span>LOGIN</span></router-link>
				<router-link tag="li" tabindex="0" class="icon-register" v-if="guest" to="/register"><span>REGISTER</span></router-link>
				<li class="icon-logout" tabindex="0" v-if="auth"><a @click.stop="logout"><span style="color: #fff;">LOGOUT</span></a></li>
			</ul>
		</nav>
		<main>
		  <div class="helper">
		      <router-view 
		        keep-alive
		            transition
		            transition-mode="out-in">
		        </router-view>
		  </div>
		</main>
	</div>
</template>
<script type="text/javascript">
	import Auth from './store/auth'
	import Flash from './helpers/flash'
	import { post, interceptors } from './helpers/api'
	export default {
		created() {
			// global error http handler
			interceptors((err) => {
				if(err.response.status === 401) {
					Auth.remove()
					this.$router.push('/login')
				}

				if(err.response.status === 500) {
					Flash.setError(err.response.statusText)
				}

				if(err.response.status === 404) {
					this.$router.push('/not-found')
				}
			})
			Auth.initialize()
		},
		data() {
			return {
				authState: Auth.state,
				flash: Flash.state
			}
		},
		computed: {
			auth() {
				if(this.authState.api_token) {
					return true
				}
				return false
			},
			guest() {
				return !this.auth
			}
		},
		methods: {
			logout() {
				post('/api/logout')
				    .then((res) => {
				        if(res.data.done) {
				            // remove token
				            Auth.remove()
				            Flash.setSuccess('You have successfully logged out.')
				            this.$router.push('/login')
				        }
				    })
			}
		}
	}
</script>
