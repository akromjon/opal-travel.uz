<div>
    <form wire:submit="save" class="contact-page__form form-one row gutter-20 contact-form-validated">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="col-md-12 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
            <div class="form-one__group">
                <input type="text" wire:model="name" name="name" id="form-one-name-input" placeholder="Ismingiz"
                    class="form-one__input">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><!-- /.form-one__group -->
        </div><!-- /.col-md-12 -->
        <div class="col-md-12 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
            <div class="form-one__group">
                <input type="tel" wire:model="phone" value="998" name="phone" id="form-one-phone-input"
                    placeholder="Telefon Raqam" class="form-one__input">
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><!-- /.form-one__group -->
        </div><!-- /.col-md-6 -->

        <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
            <div class="form-one__group">
                <textarea  name="message" wire:model="message" id="form-one-message-input" cols="30" rows="10"
                    placeholder="Xabar" class="form-one__message form-one__input"></textarea>
                @error('message')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><!-- /.form-one__group -->
        </div><!-- /.col-12-->
        <div class="col-12 wow animated fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
            <div class="form-one__btn-box">
                <button type="submit" class="form-one__btn trevlo-btn trevlo-btn--base"><span>Yuborish</span></button>
            </div><!-- /.form-one__btn-box -->
        </div><!-- /.col-12-->
    </form><!-- /.row -->
</div>
