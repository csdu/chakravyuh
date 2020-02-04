<template>
	<div>
		<table class="w-full border-collapse">
			<thead>
				<tr class="border-t border-b border-primary bg-black-50">
					<th class="text-sm font-bold uppercase text-left pl-6 py-2">ID</th>
					<th class="text-sm font-bold uppercase text-left px-4 py-2">Name</th>
					<th class="text-sm font-bold uppercase text-left px-4 py-2">Email</th>
					<th class="text-sm font-bold uppercase text-center px-4 py-2">Level</th>
					<th class="text-sm font-bold uppercase text-center pr-6 py-2">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr v-if="users.length <= 0" class="border-t">
					<td colspan="5" class="table-fit text-left pl-6 py-2 text-sm">No Participants yet.</td>
				</tr>

				<tr class="border-b border-yellow-800 hover:bg-black-40" v-for="user in users" :key="user.id">
					<td class="table-fit text-left pl-6 py-2 text-xs">{{ user.id }}</td>
					<td class="table-fit text-left capitalize px-4 py-2">
						<a class="hover:underline font-bold" :href="'/admin/participants/' + user.id + '/tries'">
							<span class>{{ user.name }}</span>
						</a>
					</td>
					<td class="table-fit text-left px-4 py-2">
						<span class>{{ user.email }}</span>
					</td>
					<td class="text-center px-4 py-2">
						<span class="px-2 py-1 bg-yellow-700 text-white rounded-full">{{ user.level }}</span>
					</td>
					<td class="table-fit text-center pr-6 py-2">
						<a
							v-if="user.disqualified"
							:href="'/admin/participants/' + user.id + '/undisqualify'"
							class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded"
						>Mercy</a>
						<a
							v-else
							:href="'/admin/participants/' + user.id + '/disqualify'"
							class="bg-red-500 hover:bg-red-700 text-white py-2 px-3 rounded"
						>Disqualify</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
export default {
	props: {
		token: { required: true }
	},
	data() {
		return {
			users: []
		};
	},
	methods: {
		getUsers() {
			window.axios
				.get("/api/users", {
					params: {
						api_token: this.token
					}
				})
				.then(res => {
					this.users = res.data;
				})
				.catch(err => {
					this.users = [];
				});
		}
	},
	created() {
		this.getUsers();
		setInterval(() => {
			this.getUsers();
		}, 3000);
	}
};
</script>
