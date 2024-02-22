<template>
  <div class="blog_column aos-init pb-0 aos-animate">
    <div class="row">
      <div v-for="blog in displayedData" :key="blog.url_slug" class="col-lg-4 col-md-4 blgCol">
        <div class="blog_column_info">
          <span>
            <a @click="goToJobForm(blog.url_slug)" class="clickable-link">
              <img :src="`/storage/${blog.image}`" :alt="blog.title" />
            </a>
          </span>

          <h5>
            <a @click="goToJobForm(blog.url_slug)" class="clickable-link"> {{ blog.title }}</a>
          </h5>
          <!-- <h5>
            <a @click="goToJobForm(blog.url_slug)" class="clickable-link"> {{ blog.url_slug }}</a>
          </h5> -->

          <div class="blogSponsor">
            <span
              ><img :src="`/storage/${blog.author_avatar}`" :alt="blog.author_name"
            /></span>

            <strong>
              {{ blog.author_name }}
              <small>{{ formatPublishedDate(blog.published_date) }}</small>
            </strong>
          </div>
        </div>
      </div>
    </div>
    <div class="pagination justify-content-center pt-5">
      <vue-awesome-paginate
        :total-items="totalItems"
        :items-per-page="itemsPerPage"
        :max-pages-shown="pagesShown"
        v-model="currentPage"
        @page-clicked="handlePageChange"
        :container-class="'pagination-container'"
      ></vue-awesome-paginate>
    </div>
  </div>
</template>


<style>
.pagination-container {
  display: flex;
  column-gap: 10px;
}
.paginate-buttons {
  height: 40px;
  width: 40px;
  border-radius: 20px;
  cursor: pointer;
  background-color: rgb(242, 242, 242);
  border: 1px solid rgb(217, 217, 217);
  color: black;
}
.paginate-buttons:hover {
  background-color: #d8d8d8;
}
.active-page {
  background-color: #3498db;
  border: 1px solid #3498db;
  color: white;
}
.active-page:hover {
  background-color: #2988c8;
}

.clickable-link {
  cursor: pointer;
}
</style>

<script>
import axios from "axios";
import moment from "moment";

export default {
  data() {
    return {
      blogs: [],
      totalItems: 0,
      currentPage: 1,
      itemsPerPage: 3,
      pagesShown: 1,
    };
  },
  mounted() {
    this.getBlogs();
  },
  computed: {
    displayedData() {
      console.log("current page:", this.currentPage);
      console.log("items per page:", this.itemsPerPage);
      const startIndex = (this.currentPage - 1) * this.itemsPerPage;
      // const startIndex = (this.currentPage * this.itemsPerPage) - this.itemsPerPage;
      console.log(startIndex);
      const endIndex = this.currentPage * this.itemsPerPage;
      // const endIndex = this.currentPage + this.itemsPerPage;

      console.log("end index:", endIndex);
      
      // Return a slice of members based on the calculated start index and items per page
      // return this.members.slice(startIndex, startIndex + this.itemsPerPage);
      return this.blogs.slice(startIndex, endIndex);
    },
  },
  methods: {
    getBlogs() {
      axios
        .get("/api/v1/blogs")
        .then((response) => {
          this.blogs = response.data;
          this.totalItems = this.blogs.length;
          console.log("blogs:", this.blogs);
          // console.log("blogs==>title:", this.blogs);
          console.log("total items:", this.totalItems);
        })
        .catch((error) => {
          console.log(error);
        });
    },

    handlePageChange(page) {
      this.currentPage = page;
      console.log(this.currentPage);
    },

    formatPublishedDate(dateString) {
      // Use moment to format the date
      return moment(dateString).fromNow();
    },

    goToJobForm(blogId) {
      // const url = `/blogs/blogId?blogId=${blogId}`;

      const url = `/blogs/Id?blogId=${blogId}`;
      const newTab = window.open(url, "_blank");
      newTab.focus();
      console.log("Navigating to:", url);
    },

  },
};
</script>
