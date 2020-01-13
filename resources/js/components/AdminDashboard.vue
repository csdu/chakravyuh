<template>
	<div class="flex flex-wrap mb-2">
		<div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2">
			<div class="bg-green-600 border rounded shadow p-2">
				<div class="flex flex-row items-center">
					<div class="flex-1 text-right">
						<h5 class="text-white">Total Participants</h5>
						<h3 class="text-white text-3xl">{{ totalParticipants }}</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2">
			<div class="bg-blue-600 border rounded shadow p-2">
				<div class="flex flex-row items-center">
					<div class="flex-1 text-right">
						<h5 class="text-white">Highest Level</h5>
						<h3 class="text-white text-3xl">
							<a
								:href="'/admin/question/' + highestLevel.id + '/show'"
								class="hover:text-gray-300 hover:underline"
							>{{ highestLevel.level || "None" }}</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2 xl:pr-3 xl:pl-1">
			<div class="bg-orange-600 border rounded shadow p-2">
				<div class="flex flex-row items-center">
					<div class="flex-1 text-right pr-1">
						<h5 class="text-white">Most Users Stuck On Level</h5>
						<h3 class="text-white text-3xl">
							<a
								:href="'/admin/question/' + stuckLevel.id + '/show'"
								class="hover:text-gray-300 hover:underline"
							>{{ stuckLevel.level || "None" }}</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			totalParticipants: "",
			highestLevel: "",
			stuckLevel: ""
		};
	},
	methods: {
		getDashboardData() {
			window.axios
				.get("/api/dashboard")
				.then(res => {
					console.log(res);
					this.totalParticipants = res.data.totalParticipants;
					this.highestLevel = res.data.highestLevel;
					this.stuckLevel = res.data.stuckLevel;
				})
				.catch(err => {
					this.totalParticipants = "?";
					this.highestLevel = "?";
					this.stuckLevel = "?";
				});
		}
	},
	created() {
		this.getDashboardData();

		setInterval(() => {
			this.getDashboardData();
		}, 3000);
	}
};
</script>