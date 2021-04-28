@csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role User') }}</label>
                            <div class="col-md-6">
                                <select name="role" id="role"
                                class="custom-select col-md-5 @error('role') is-invalid @enderror">
                                <option value="" selected>-</option>
                                <option value="1">Super User</option>
                                <option value="2">User</option>
                                </select>
                             </div>
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                     
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Departement') }}</label>
                            <div class="col-md-6">
                                <select name="divisi_id" id="divisi_id"
                                class="custom-select col-md-5 @error('divisi_id') is-invalid @enderror">
                                <option value="" selected>-</option>
                                <option value="kd01" >Marketing</option>
                                <option value="kd02">Accounting</option>
                                <option value="kd03">Logistik</option>
                                <option value="kd04">Umum & Personalia</option>
                                <option value="kd05">Dyeing Finishing</option>
                                <option value="kd06">Engineering</option>
                                <option value="kd07">Weaving</option>
                                
                                </select>
                             </div>
                                @error('divisi_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mt-5">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">{{$tombol}}</button>
                        </div>
                        </div>