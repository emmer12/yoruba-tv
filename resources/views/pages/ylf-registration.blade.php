<x-layout>

    <section class="my-[50px]">
        <div class="container-x">
            <div class="card fadeIn sm:w-1/2 w-full bg-gray-50 rounded-xl p-4 m-auto">
                <div class="mb-2">
                    <h4 class="text-lg  font-semibold text-gray-900">Yoruba Ledership forum</h4>
                    <p>Membership application form</p>
                </div>

                <form method="POST" action="{{ route('registration') }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-3">
                        <div class="field my-2">
                            <label for="surname">Surname</label>
                            <input name="surname" id="surname" value="{{ old('surname') }}" type="text"
                                class="form-control  @error('surname') is-invalid @enderror" />
                        </div>

                        <div class="field my-2">
                            <label for="other_name">Other Name</label>
                            <input name="other_name" id="other_name" value="{{ old('other_name') }}" type="text"
                                class="form-control  @error('other_name') is-invalid @enderror" />
                        </div>
                    </div>
                    <div class="field my-2">
                        <label for="madian_name">Madian Name</label>
                        <input name="madian_name" id="madian_name" value="{{ old('madian_name') }}" type="text"
                            class="form-control  @error('madian_name') is-invalid @enderror" />
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-3">
                        <div class="field my-2">
                            <label for="sex">Sex</label>
                            <select name="sex" class="form-select @error('sex') is-invalid @enderror"">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="field my-2">
                            <label for="marital_status">Marital Status</label>
                            <select name="marital_status" class="form-select">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-3">
                        <div class="field my-2">
                            <label for="religion">Religion</label>
                            <input name="religion" value="{{ old('religion') }}" type="text" class="form-control" />
                        </div>

                        <div class="field my-2">
                            <label for="date_of_birth">Date of Birth</label>
                            <input name="date_of_birth" value="{{ old('date_of_birth') }}" type="date"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-3">
                        <div class="field my-2">
                            <label for="home_town">Home Town</label>
                            <input name="home_town" type="text" value="{{ old('home_town') }}"
                                class="form-control" />
                        </div>
                        <div class="field my-2">
                            <label for="lga">Local Government Area (LGA)</label>
                            <input name="lga" id="lga" type="text" value="{{ old('lga') }}"
                                class="form-control" />
                        </div>
                    </div>


                    <div class="field my-2">
                        <label for="home_address">Home Address</label>
                        <textarea name="home_address" class="form-control" value="{{ old('home_address') }}"></textarea>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-3">
                        <div class="field my-2">
                            <label for="tel_no">Telephone Number</label>
                            <input name="tel_no" value="{{ old('tel_no') }}" id="tel_no" type="tel"
                                class="form-control" />
                        </div>

                        <div class="field my-2">
                            <label for="education_qualification">Education Qualification</label>
                            <input name="education_qualification" type="text"
                                value="{{ old('education_qualification') }}" class="form-control" />
                        </div>
                    </div>

                    <div class="field my-2">
                        <label for="email">Email Adresss</label>
                        <input name="email" type="email" value="{{ old('email') }}" id="email"
                            class="form-control" />
                    </div>

                    <div class="field my-2">
                        <label for="why_join">Why do you want to join?</label>
                        <textarea name="why_join" value="{{ old('why_join') }}" class="form-control"></textarea>
                    </div>

                    <div class="field my-2">
                        <label for="next_of_kin_details">Next of Kin Details (Name,Phone Number,Address)</label>
                        <textarea name="next_of_kin_details" value="{{ old('next_of_kin_details') }}" class="form-control"></textarea>
                    </div>

                    <div class="my-4 flex justify-center items-center">
                        <label for="photo"
                            class="h-[200px] w-[200px] bg-blue-500 text-center leading-[200px] font-semibold text-base rounded-sm text-white cursor-pointer relative overflow-clip">Affix
                            Photo
                            <img id="display" class="h-full w-full object-contain absolute top-0" />
                        </label>
                        <input type="file" name="photo" id="photo" class="hidden "
                            onchange="handleChange(event)" accept="image/*" />
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary mt-4 ">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>


<script>
    const display = document.getElementById('display')

    function handleChange(event) {
        const file = event.target.files[0];
        display.src = URL.createObjectURL(file)
    }
</script>
