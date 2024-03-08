<template>
  <v-container class="mt-16">
    <v-row>
      <v-spacer></v-spacer>
      <v-spacer></v-spacer>
      <v-col class="grey lighten-3">
          <v-card-text>
            <v-form>
              <v-card class="d-flex" color="transparent" outlined>
                <label for="name">Full name</label>
              </v-card>
              <v-card class="d-flex" color="transparent" outlined>
                <input type="text" v-model="name" class="form-input" id="name">
              </v-card>

              <v-card class="d-flex mt-4" color="transparent" outlined>
                <label for="country">Country</label>
              </v-card>
              <v-card class="d-flex" color="transparent" outlined>
                <select v-model="countrySelectValue" @change="onChangeCountry($event)" id="country" class="form-select">
                  <option v-for="(countryData, index) in countriesData" :value="index">
                    {{countryData.flag}} {{ countryData.name }}
                  </option>
                </select>
              </v-card>

              <v-card class="d-flex mt-4" color="transparent" outlined>
                <label for="phone">Phone number</label>
              </v-card>

              <v-card class="d-flex" color="transparent" outlined>
                <div class="form-input">
                  <span class="w-20"> {{ phoneCountryCodePart}} </span>
                  <input type="number" step="1" v-model="phoneLocalNumberPart" id="phone" class="w-80">
                </div>
              </v-card>

              <v-card class="d-flex mt-4" color="transparent" outlined>
                <label for="email">Email</label>
              </v-card>

              <v-card class="d-flex" color="transparent" outlined>
                  <input type="text" v-model="email" id="email" class="form-input">
              </v-card>

              <v-card class="d-flex justify-center mt-4" color="transparent" outlined>
                <button @click="onSubmitForm($event)" type="button" class="form-button">Submit</button>
              </v-card>
            </v-form>
          </v-card-text>
      </v-col>
      <v-spacer></v-spacer>
      <v-spacer></v-spacer>
    </v-row>
  </v-container>
</template>

<script>
import countriesData from '../data/countries.json'

console.log(countriesData.map((countryData) => countryData.name));
export default {
  data() {
    return {
      countriesData: countriesData,
      name: '',
      countrySelectValue: '',
      country: '',
      phoneCountryCodePart: '+',
      phoneLocalNumberPart: '',
      email: '',
    }
  },
  methods: {
    onChangeCountry(event) {
      this.phoneCountryCodePart = this.countriesData[event.target.value].idd;
      this.country = this.countriesData[event.target.value].name;
    },
    onSubmitForm(event) {
      axios({
        method: 'post',
        url: '/api/auth/sign-up',
        headers: {},
        data: {
          phone: this.phone,
          country: this.country,
          name: this.name,
          email: this.email,
        }
      });
    },
  },
  computed: {
    // a computed getter
    phone: function () {
      return this.phoneCountryCodePart + this.phoneLocalNumberPart;
    }
  }
}
</script>