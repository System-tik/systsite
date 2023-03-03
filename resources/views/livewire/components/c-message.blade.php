<div>
    <div class="tc sf yo ap zf ep qb">
        <div class="vd to/2">
            <label class="rc ac" for="fullname">Nom complet</label>
            <input
                type="text"
                name="fullname"
                id="fullname"
                placeholder="DIKIZEYIKO NKELANI Merciadi"
                class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                wire:model="nom"
            />
            @error('nom') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="vd to/2">
            <label class="rc ac" for="email">Address email</label>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="example@gmail.com"
                class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                wire:model="email"
            />
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="tc sf yo ap zf ep qb">
        <div class="vd to/2">
            <label class="rc ac" for="phone">Numéro de contact</label>
            <input
                type="text"
                name="phone"
                id="phone"
                placeholder="00243 00 00 00 000"
                class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                wire:model="tel"
            />
            @error('tel') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="vd to/2">
            <label class="rc ac" for="subject">Sujet</label>
            <input
                type="text"
                for="subject"
                id="subject"
                placeholder="Saisir le sujet"
                class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                wire:model="sujet"
            />
            @error('sujet') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="fb">
        <label class="rc ac" for="message">Message</label>
        <textarea
            placeholder="Message"
            rows="4"
            name="message"
            id="message"
            class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"
            wire:model="contenu"
        ></textarea>
        @error('contenu') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="tc xf">
        <button type="button" class="vc rg lk gh ml il hi gi _l" wire:click="send">
            Envoyer le message
            <svg wire:loading wire:target="send" aria-hidden="true" class="ml-5 w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
        </button>

    </div>
</div>