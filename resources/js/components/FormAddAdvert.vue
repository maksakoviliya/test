<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <h3 class="card-header">Разместить объявление</h3>
                    <div class="card-body">
                        <form class="text-left" action="">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="name">Имя</label>
                                    <input type="text" class="form-control" @keyup="userNameSet" v-model="firstName" :class="hasError ? 'is-invalid' : ''" id="name" placeholder="Имя" value="" required>
                                    <span class="invalid-feedback" v-if="hasError">Ошибка!</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="last-name">Фамилия</label>
                                    <input type="text" @keyup="userNameSet" v-model="secondName" class="form-control" :class="hasError ? 'is-invalid' : ''" id="last-name" placeholder="Фамилия" value="" required>
                                    <span class="invalid-feedback" v-if="hasError">Ошибка!</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="username">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="username-prepend">@</span>
                                        </div>
                                        <input type="text" v-model="userName" class="form-control" :class="hasError ? 'is-invalid' : ''" id="username" placeholder="Username" aria-describedby="username-prepend" required>
                                        <div class="invalid-feedback" v-if="hasError">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="metro">Метро</label>
                                    <select v-model="metro" class="form-control" :class="hasError ? 'is-invalid' : ''" id="metro" placeholder="Метро" required>
                                        <option disabled>Выберите станцию..</option>
                                        <option v-for="station in stations" :value="station">
                                            {{ station }}
                                        </option>
                                    </select>
                                    <div class="invalid-feedback" v-if="hasError">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer04">State</label>
                                    <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer05">Zip</label>
                                    <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
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
            hasError: false,
            errors: [],
            stations: [],
            metro: '',
            firstName: '',
            secondName: '',
            userName: ''
        }
    },
    created() {
        axios.get('/metro')
            .then(response => {
                // handle success
                this.stations = response.data.metro
            })
            .catch(error => {
                // handle error
                console.log(error);
            })
    },
    methods: {
        userNameSet() {
            this.userName = this.firstName + '_' + this.secondName
        }
    }
}

</script>
