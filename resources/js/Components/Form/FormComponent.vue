<script>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';

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
    components: { InputError, InputLabel, TextInput, PersonalizedButton },
    
    
}
</script>

<template>

    <form @submit.prevent="$emit('submit', option)">

        <!-- Register -->
        <div class="form-container flex flex-col gap-6" v-if="option === 'Register'">

            <!-- Name -->
            <div>
                <InputLabel class="text-xl" for="name" value="Name" />

                <TextInput id="name" type="text" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="register.name" required />

                <InputError class="mt-2" :message="register.errors.name" />
            </div>

            <!-- Last Name -->
            <div>
                <InputLabel class="text-xl" for="last_name" value="Lastname" />

                <TextInput id="last_name" type="text" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="register.last_name" required />

                <InputError class="mt-2" :message="register.errors.last_name" />
            </div>

            <!-- Email -->
            <div>
                <InputLabel class="text-xl" for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 text-lg h-12 rounded-2xl block w-full"
                    v-model="register.email" required />

                <InputError class="mt-2" :message="register.errors.email" />
            </div>

            <!-- Password -->
            <div>
                <InputLabel class="text-xl" for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="register.password" required />

                <InputError class="mt-2" :message="register.errors.password" />
            </div>

            <!-- Conferma Password -->
            <div>
                <InputLabel class="text-xl" for="password_confirmation" value="Confirm Password" />

                <TextInput id="password_confirmation" type="password" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="register.password_confirmation" required />

                <InputError class="mt-2" :message="register.errors.password_confirmation" />
            </div>

        </div>

        <!-- Login -->
        <div class="form-container flex flex-col gap-6" v-else-if="option === 'Login'">

            <!-- Email -->
            <div>
                <InputLabel class="text-xl" for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 text-lg h-12 rounded-2xl block w-full"
                    v-model="login.email" required />

                <InputError class="mt-2" :message="login.errors.email" />
            </div>

            <!-- Password -->
            <div>
                <InputLabel class="text-xl" for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="login.password" required />

                <InputError class="mt-2" :message="login.errors.password" />
            </div>

        </div>

        <!-- Create -->
        <div class="form-container w-2/3 mx-auto" v-else-if="option === 'Create'">

            <!-- TITLE -->
            <div class="my-4">
                <InputLabel class="text-2xl text-[#684e52] font-bold" for="title" value="Title" />

                <TextInput id="title" type="text" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="create.title" required />

                <InputError class="mt-2" :message="create.errors.title" />
            </div>

            <div class="flex gap-5">

                <!-- DEPARTURE DATE -->
                <div class="my-4 basis-1/2">
                    <InputLabel class="text-2xl text-[#684e52] font-bold" for="departure_date" value="Departure date" />

                    <TextInput id="departure_date" type="date" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                        v-model="create.departure_date" required />

                    <InputError class="mt-2" :message="create.errors.departure_date" />
                </div>

                <!-- RETURN DATE -->
                <div class="my-4 basis-1/2">
                    <InputLabel class="text-2xl text-[#684e52] font-bold" for="return_date" value="Return date" />

                    <TextInput id="return_date" type="date" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                        v-model="create.return_date" required />

                    <InputError class="mt-2" :message="create.errors.return_date" />
                </div>
            </div>

            <!-- IMAGE URL -->
            <div class="my-4">
                <InputLabel class="text-2xl text-[#684e52] font-bold" for="image_url" value="Image link" />

                <TextInput id="image_url" type="text" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="create.image_url"  />

                <InputError class="mt-2" :message="create.errors.image_url" />
            </div>

        </div>

        <!-- Edit -->
        <div class="form-container w-2/3 mx-auto" v-else-if="option === 'Edit'">

            <!-- TITLE -->
            <div class="my-4">
                <InputLabel class="text-2xl text-[#684e52] font-bold" for="title" value="Title" />

                <TextInput id="title" type="text" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="edit.title" required />

                <InputError class="mt-2" :message="edit.errors.title" />
            </div>

            <div class="flex gap-5">

                <!-- DEPARTURE DATE -->
                <div class="my-4 basis-1/2">
                    <InputLabel class="text-2xl text-[#684e52] font-bold" for="departure_date" value="Departure date" />

                    <TextInput id="departure_date" type="date" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                        v-model="edit.departure_date" required />

                    <InputError class="mt-2" :message="edit.errors.departure_date" />
                </div>

                <!-- RETURN DATE -->
                <div class="my-4 basis-1/2">
                    <InputLabel class="text-2xl text-[#684e52] font-bold" for="return_date" value="Return date" />

                    <TextInput id="return_date" type="date" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                        v-model="edit.return_date" required />

                    <InputError class="mt-2" :message="edit.errors.return_date" />
                </div>


            </div>

            <!-- IMAGE URL -->
            <div class="my-4">
                <InputLabel class="text-2xl text-[#684e52] font-bold" for="image_url" value="Image link" />

                <TextInput id="image_url" type="text" class="mt-1 text-lg block h-12 rounded-2xl w-full"
                    v-model="edit.image_url"  />

                <InputError class="mt-2" :message="edit.errors.image_url" />
            </div>

        </div>

        <!-- Bottoni -->
        <div class="flex justify-center items-center" v-if="option">

            <div v-if="option === 'Register'">
                <PersonalizedButton colorMode="primary" label="Register">
                </PersonalizedButton>
            </div>
            <div v-else-if="option === 'Login'">
                <PersonalizedButton colorMode="primary" label="Login">
                </PersonalizedButton>
            </div>
            <div v-else-if="option === 'Create'">
                <PersonalizedButton colorMode="primary" label="Create">
                </PersonalizedButton>
            </div>
            <div v-else-if="option === 'Edit'">
                <PersonalizedButton colorMode="primary" label="Edit">
                </PersonalizedButton>
            </div>



        </div>

    </form>

</template>

