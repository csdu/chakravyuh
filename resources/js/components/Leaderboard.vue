<template>
  <div class="w-full relative bg-white text-black mt-16">
    <table class="w-full mx-auto text-left">
      <thead class="rankone font-extrabold text-white">
        <tr class="h-12">
          <td class="pl-2">Rank</td>
          <td class="text-center">
            <span>
              <img
                :src="sortedUsers[0].avatar_url"
                class="w-16 h-16 border-white border-2 shadow-lg rounded-full mx-auto left-0 right-0 absolute"
              />
            </span>
          </td>
          <td class="text-right pr-2">Score</td>
        </tr>
      </thead>
      <tbody>
        <tr class="rankone font-extrabold text-2xl text-white">
          <td class="pl-2">1</td>
          <td class="overflow-hidden text-center">{{sortedUsers[0].name}}</td>
          <td class="text-right pr-2">{{sortedUsers[0].score}}</td>
        </tr>

        <tr class="table-row" v-for="(user, key) in sortedUsers" v-if="key != 0">
          <td class="pl-2 py-2 font-bold">{{++key}}</td>
          <td class="py-2">
            <span>
              <img :src="user.avatar_url" class="rounded-full h-8 w-8 inline-block shadow-2xl"/>
            </span>
            {{ user.name }}
          </td>
          <td class="pr-2 py-2 text-right font-bold">{{user.score}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["current"],
  data() {
    return {
      users: [
        {
          id: 1,
          name: "Elon Musk",
          score: 10,
          level: 3,
          avatar_url:
            "https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Elon_Musk_2015.jpg/408px-Elon_Musk_2015.jpg"
        },
        {
          id: 2,
          name: "Jeff Bezos",
          score: 5,
          level: 1,
          avatar_url:
            "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Jeff_Bezos%27_iconic_laugh_%28cropped%29.jpg/480px-Jeff_Bezos%27_iconic_laugh_%28cropped%29.jpg"
        },
        {
          id: 3,
          name: "Bill Gates",
          score: 100,
          level: 5,
          avatar_url:
            "https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Bill_Gates_July_2014.jpg/398px-Bill_Gates_July_2014.jpg"
        }
      ]
    };
  },
  created() {
    // this.fetchLeaderboard();
  },
  methods: {
    fetchLeaderboard() {
      axios.get("/leaderboard").then(response => {
        this.users = response.data;
      });
    }
  },
  computed: {
    sortedUsers() {
      return this.users.sort((a, b) => b.score - a.score);
    }
  }
};
</script>

<style scoped>
.rankone {
  background: rgb(212, 175, 55);
  background: radial-gradient(
    circle,
    rgba(212, 175, 55, 1) 18%,
    rgba(195, 101, 34, 1) 90%
  );
}
.rankone img {
  top: -1.5rem;
}

.table-row {
  border-bottom: 0.5px solid rgb(199, 185, 185);
}
</style>