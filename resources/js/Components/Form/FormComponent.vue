<script>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

export default {
    name: 'FormComponent',
    emits: ['submit'],
    props: {
        option: String,
        login: Object,
        register: Object,
        create: Object,
        edit: Object,
        editForm: Object
    },
    components: { InputError, InputLabel, TextInput },
    data: () => ({
        title: '',
        departure_date: '',
        return_date: ''
    })
}
</script>

<template>

    <form @submit.prevent="$emit('submit', option)">

        <!-- Register -->
        <div class="form-container flex flex-col gap-6" v-if="option === 'Register'">

            <!-- Name -->
            <div>
                <InputLabel class="text-xl" for="name" value="Name" />

                <TextInput id="name" type="text" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="register.name" required />

                <InputError class="mt-2" :message="register.errors.name" />
            </div>

            <!-- Last Name -->
            <div>
                <InputLabel class="text-xl" for="last_name" value="Lastname" />

                <TextInput id="last_name" type="text" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="register.last_name" required />

                <InputError class="mt-2" :message="register.errors.last_name" />
            </div>

            <!-- Email -->
            <div>
                <InputLabel class="text-xl" for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 text-lg h-8 rounded-2xl block w-full"
                    v-model="register.email" required />

                <InputError class="mt-2" :message="register.errors.email" />
            </div>

            <!-- Password -->
            <div>
                <InputLabel class="text-xl" for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="register.password" required />

                <InputError class="mt-2" :message="register.errors.password" />
            </div>

            <!-- Conferma Password -->
            <div>
                <InputLabel class="text-xl" for="password_confirmation" value="Confirm Password" />

                <TextInput id="password_confirmation" type="password" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="register.password_confirmation" required />

                <InputError class="mt-2" :message="register.errors.password_confirmation" />
            </div>

        </div>

        <!-- Login -->
        <div class="form-container flex flex-col gap-6" v-else-if="option === 'Login'">

            <!-- Email -->
            <div>
                <InputLabel class="text-xl" for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 text-lg h-8 rounded-2xl block w-full"
                    v-model="login.email" required />

                <InputError class="mt-2" :message="login.errors.email" />
            </div>

            <!-- Password -->
            <div>
                <InputLabel class="text-xl" for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="login.password" required />

                <InputError class="mt-2" :message="login.errors.password" />
            </div>

        </div>

        <!-- Create -->
        <div class="form-container" v-else-if="option === 'Create'">

            <!-- TITLE -->
            <div>
                <InputLabel class="text-xl" for="title" value="Title" />

                <TextInput id="title" type="text" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="create.title" required />

                <InputError class="mt-2" :message="create.errors.title" />
            </div>

            <!-- DEPARTURE DATE -->
            <div>
                <InputLabel class="text-xl" for="departure_date" value="Departure date" />

                <TextInput id="departure_date" type="date" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="create.departure_date" required />

                <InputError class="mt-2" :message="create.errors.departure_date" />
            </div>

            <!-- RETURN DATE -->
            <div>
                <InputLabel class="text-xl" for="return_date" value="Return date" />

                <TextInput id="return_date" type="date" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="create.return_date" required />

                <InputError class="mt-2" :message="create.errors.return_date" />
            </div>

        </div>

        <!-- Edit -->
        <div class="form-container" v-else-if="option === 'Edit'">

            <!-- TITLE -->
            <div>
                <InputLabel class="text-xl" for="title" value="Title" />

                <TextInput id="title" type="text" class="mt-1 text-lg block h-8 rounded-2xl w-full" v-model="edit.title"
                    required />

                <InputError class="mt-2" :message="edit.errors.title" />
            </div>

            <!-- DEPARTURE DATE -->
            <div>
                <InputLabel class="text-xl" for="departure_date" value="Departure date" />

                <TextInput id="departure_date" type="date" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="edit.departure_date" required />

                <InputError class="mt-2" :message="edit.errors.departure_date" />
            </div>

            <!-- RETURN DATE -->
            <div>
                <InputLabel class="text-xl" for="return_date" value="Return date" />

                <TextInput id="return_date" type="date" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                    v-model="edit.return_date" required />

                <InputError class="mt-2" :message="edit.errors.return_date" />
            </div>

        </div>

        <!-- Bottoni -->
        <div class="flex justify-center items-center" v-if="option">

            <!-- Bottone per la registrazione -->
            <button v-if="option === 'Register'"
                class="inline-flex items-center mt-8 px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Register
            </button>

            <!-- Bottone per il login -->
            <button v-else-if="option === 'Login'"
                class="inline-flex items-center mt-8 px-4 py-2 bg-blue-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Login
            </button>

            <!-- Bottone per la creazione -->
            <button v-else-if="option === 'Create'"
                class="inline-flex items-center mt-8 px-4 py-2 bg-green-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Create
            </button>

            <!-- Bottone per l'edit -->
            <button v-else-if="option === 'Edit'"
                class="inline-flex items-center mt-8 px-4 py-2 bg-green-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Update
            </button>

        </div>

    </form>

</template>