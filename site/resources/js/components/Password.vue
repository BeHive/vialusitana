<template>
    <div class="card">
        <div class="card-header">
            <i class="fas fa-pencil-alt"></i> Change Password
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Current password</label>
                    <div class="col-md-6">
                        <input class="form-control" :class="{'is-invalid': errors.current}" type="password"
                               v-model="password.current">
                        <div class="invalid-feedback" v-if="errors.current">{{errors.current[0]}}</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">New password</label>
                    <div class="col-md-6">
                        <input class="form-control" :class="{'is-invalid': errors.password}" type="password"
                               v-model="password.password">
                        <div class="invalid-feedback" v-if="errors.password">{{errors.password[0]}}</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Password confirmation</label>
                    <div class="col-md-6">
                        <input class="form-control" :class="{'is-invalid': errors.password_confirmation}"
                               type="password" v-model="password.password_confirmation">
                        <div class="invalid-feedback" v-if="errors.password_confirmation">
                            {{errors.password_confirmation[0]}}
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button class="btn btn-primary" type="button" :disabled="submiting"
                                @click="updateAuthUserPassword">
                            <i class="fas fa-spinner fa-spin" v-if="submiting"></i> Update
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                password: {},
                errors: {},
                submiting: false
            }
        },
        methods: {
            updateAuthUserPassword() {
                this.submiting = true
                axios.put(`/api/profile/updateAuthUserPassword`, this.password)
                    .then(response => {
                        this.password = {}
                        this.errors = {}
                        this.submiting = false
                        this.$toasted.global.error('Password changed!');
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors
                        this.submiting = false
                    })
            }
        }
    }
</script>