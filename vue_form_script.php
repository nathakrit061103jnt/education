 <script>
const app = new Vue({
    el: '#app',
    data: () => ({
        message: 'Hello Vue!',
        search_course_1: "",
        search_course_2: "",
        search_course_3: "",
        search_course_4: "",
        course_input_1: null,
        course_input_2: null,
        course_input_3: null,
        course_input_4: null,
    }),
    mounted() {

    },
    methods: {
        async getByIdCourses(course_code, number) {
            try {
                const {
                    data
                } = await axios.get(`./api/get_course.php?course_code=${course_code}`)
                // console.log('data', data);

                switch (number) {
                    case 1:
                        this.course_input_1 = data[0].course_name.trim();
                        break;
                    case 2:
                        this.course_input_2 = data[0].course_name.trim();
                        break;
                    case 3:
                        this.course_input_3 = data[0].course_name.trim();
                        break;
                    case 4:
                        this.course_input_4 = data[0].course_name.trim();
                        break;



                    default:
                        break;
                }
            } catch (error) {
                console.error(error)
            }
        },
        searchCourseFunc_1() {

            // console.log('search_course_1', this.search_course_1);
            this.getByIdCourses(this.search_course_1, 1)

        },
        searchCourseFunc_2() {

            // console.log('search_course_1', this.search_course_1);
            this.getByIdCourses(this.search_course_2, 2)

        },
        searchCourseFunc_3() {

            // console.log('search_course_1', this.search_course_1);
            this.getByIdCourses(this.search_course_3, 3)

        },
        searchCourseFunc_4() {

            // console.log('search_course_1', this.search_course_1);
            this.getByIdCourses(this.search_course_4, 4)

        }



    },
})
 </script>