<template>
    <div class="main-container" >

        <!-- Header background image -->
        <div class="img-container">
            <img src="/images/header/contact-us.png" alt="Norway" style="width:100%;">
        </div>

        <!-- Main bodu content -->
        <div class ="body-container">

            <p class="home-heading">BeMo Academic Consulting Inc.</p>

            <p><span class="contact-title">Toll Free</span>: 1-855-900-BeMo (2366)</p>

            <p><span class="contact-title">Email</span>: info@bemoacademicconsulting.com</p>

            <div class ="body-container">
                <form @submit.prevent="submit">
                
                    <div class="div-center">
                        <span>Name : * </span><br>
                        <input type="text" name="fullname" id="name" v-model="fields.name" class="text-field" />
                        <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
                    </div>
                    <div class="div-center">
                        <span>Email Address : * </span><br>
                        <input type="text" name="email" id="email" v-model="fields.email" class="text-field" />
                        <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
                    </div>
                    <div class="div-center">
                        <span>How can help you? * </span><br>
                        <textarea name="message" id="message" v-model="fields.message" rows="10" cols="50" class="text-field"></textarea>
                        <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
                    </div>
                    <div class="div-center">
                         <span><input type="reset" name="reset" value="Reset" class="btn-style" /></span>
                        <span><input type="submit" name="submit" value="Submit" class="btn-style" /></span>                       
                    </div>
                </form>
            </div>

            <div class="contact-note">
                <span class="contact-title">Note</span>: If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)
            </div>
        </div>

        
    </div>
</template>

<script>
        export default {
        data() {
            return {
            fields: {},
            errors: {},
            }
        },
        methods: {
            submit() {
            this.errors = {};
            axios.post('/submit', this.fields).then(response => {
                alert('Message sent!' );
            }).catch(error => {
                if (error.response.status === 422) {
                this.errors = error.response.data.errors || {};
                }
            });
            },
        },
        }
</script>
