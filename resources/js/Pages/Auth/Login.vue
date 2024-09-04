<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <div class="min-h-screen flex items-center justify-center bg-slate-200">
        <!-- Container utama dengan penyesuaian lebar dan shadow -->
        <div class="flex flex-col lg:flex-row w-full max-w-5xl mx-auto overflow-hidden h-full max-h-[90vh] rounded-lg shadow-2xl">
            <!-- Bagian kiri dengan background abu-abu gelap -->
            <div class="lg:w-1/2 flex flex-col justify-center bg-gray-900 text-white py-6 px-4 lg:px-10">
                <div class="text-center">
                    <img src="/media/SociaLenzz.png" alt="SociaLenzz Logo" class="h-10 mb-2 mx-auto">
                    <img src="/media/vector_login.png" alt="Vector Image" class="w-2/3 h-auto mx-auto">
                    <h2 class="text-3xl font-bold mt-4">Welcome To Login Page</h2>
                </div>
            </div>

            <!-- Bagian kanan dengan form -->
            <div class="lg:w-1/2 flex flex-col justify-center bg-white py-8 px-6 lg:px-12">
                <div class="w-full max-w-md mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 text-center">Login</h2>
                    <p class="text-center text-gray-500 mb-6">Sign in to your account</p>

                    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                        {{ status }}
                    </div>

                    <form @submit.prevent="submit" class="space-y-4">
                        <div>
                            <InputLabel for="email" value="Email Address" />

                            <TextInput
                                id="email"
                                type="email"
                                class="mt-1 block w-full bg-gray-100 text-gray-900 border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400"
                                v-model="form.email"
                                required
                                autofocus
                                autocomplete="username"
                            />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <div class="mt-2">
                            <InputLabel for="password" value="Password" />

                            <TextInput
                                id="password"
                                type="password"
                                class="mt-1 block w-full bg-gray-100 text-gray-900 border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400"
                                v-model="form.password"
                                required
                                autocomplete="current-password"
                            />

                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <div class="block mt-2">
                            <label class="flex items-center text-gray-500">
                                <Checkbox name="remember" v-model:checked="form.remember" />
                                <span class="ms-2 text-sm">Remember me</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <Link
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="underline text-sm text-gray-500 hover:text-yellow-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400"
                            >
                                Forgot your password?
                            </Link>

                            <PrimaryButton class="ms-4 bg-yellow-400 text-gray-800 hover:bg-yellow-500 focus:ring-yellow-500" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Login
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
}

.min-h-screen {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Shadow tambahan dan lebar yang disesuaikan */
.shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Penyesuaian tinggi div */
.max-h-[90vh] {
    max-height: 90vh;
}
</style>
