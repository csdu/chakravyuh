<template>
	<div>
		<h1 class="text-2xl mb-4 xl:mb-6 font-display text-shadow-2">LEADERBOARD</h1>
		<!-- {{-- winner svg --}} -->
		<div class="w-full flex items-center justify-between">
			<!-- {{-- left person --}} -->
			<div class="w-3/12">
				<img src="/images/ancient-person.svg" />
			</div>

			<div class="w-5/12 relative">
				<div class="absolute w-4/12" style="top: -12%; left: 62%; transform: rotate(30deg);">
					<img src="/images/crown.svg" alt />
				</div>
				<!-- {{-- winner circle --}} -->
				<winner-circle :imageUrl="topUser.avatar_url" />
			</div>
			<!-- {{-- right person --}} -->
			<div class="w-3/12">
				<img src="/images/ancient-person.svg" style="transform: scaleX(-1);" />
			</div>
		</div>
		<!-- {{-- winner details --}} -->
		<div class="text-shadow-1 font-extrabold uppercase">
			<h2 class="-mt-3 mb-3 font-display text-2xl text-primary">
				1
				<span class="text-sm">st</span>
			</h2>
			<!-- {{-- winner name --}} -->
			<h2 class="-mt-4 mb-1 text-xl font-display text-orange-400">{{ topUser.name }}</h2>
			<!-- {{-- winner score and level --}} -->
			<h3 class="w-10/12 mx-auto text-lg flex justify-between">
				<span class="w-1/3 flex items-center justify-center">
					<span class="w-5 mr-1">
						<img src="/images/coin.svg" alt />
					</span>
					<span class="text-yellow-100">{{ topUser.total_score }}</span>
				</span>
				<span>|</span>
				<span class="w-1/3">
					LVL
					{{ topUser.level }}
				</span>
			</h3>
		</div>
		<!-- {{-- divider --}} -->
		<div class="w-full my-3">
			<button
				@click="getLeaderBoard()"
				title="reload"
				class="px-2 text-xl bg-black-op2 rounded-full"
			>&#x21ba;</button>
			<svg viewBox="0 0 300 6" fill="#0e0101">
				<polygon points="0,3 147,1.5 150,0 153,1.5 300,3 153,4.5 150,6 147,4.5" />
			</svg>
		</div>
		<!-- {{-- table entries --}} -->
		<div class="text-shadow-md">
			<div
				v-for="(user, index) in users"
				:key="user.id"
				class="w-full mx-auto mb-1 p-1 rounded-lg flex items-center justify-center font-extrabold text-left group hover:shadow-md hover:bg-light-brown"
			>
				<div class="w-8 text-right text-lg group-hover:text-orange-400">{{ index + 2 }}</div>

				<div class="mx-3 xl:mx-4 inline-flex items-center flex-1">
					<img
						class="h-8 w-8 xl:h-10 xl:w-10 my-auto mr-3 xl:mr-4 rounded-full shadow-md border-2 border-primary group-hover:border-yellow-100"
						:src="user.avatar_url"
						alt
					/>
					<div class="w-9/12 flex-1 text-orange-400 group-hover:text-yellow-100">{{ user.name }}</div>
				</div>

				<div class="text-sm flex flex-col justify-between">
					<div class="w-full">
						<span class="flex items-center">
							<span class="w-4 h-4 mr-1">
								<img src="/images/coin.svg" />
							</span>
							<span class="text-orange-400 group-hover:text-yellow-100">{{ user.total_score }}</span>
						</span>
					</div>
					<div class="uppercase font-extrabold group-hover:text-orange-400">
						<span>LVL {{ user.level }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		token: { required: true }
	},
	data() {
		return {
			users: [],
			topUser: {}
		};
	},
	methods: {
		getLeaderBoard() {
			window.axios
				.get("api/leaderboard", {
					params: {
						api_token: this.token
					}
				})
				.then(res => {
					if (Object.keys(res.data).length > 0) {
						this.users = Object.values(res.data);
						this.topUser = this.users[0];
						this.users.shift();
					}
				})
				.catch(err => {
					this.users = [];
					this.topUser = {};
				});
		}
	},
	created() {
		this.getLeaderBoard();
	}
};
</script>