import React, { useState } from 'react';

export default function TextToSlug(props) {
    const [numeral, setNumerals] = useState('');

    function slugify(text) {
        text = text.toString().toLowerCase().trim();

        const sets = [
            { to: 'a', from: '[ÀÁÂÃÄÅÆĀĂĄẠẢẤẦẨẪẬẮẰẲẴẶἀ]' },
            { to: 'c', from: '[ÇĆĈČ]' },
            { to: 'd', from: '[ÐĎĐÞ]' },
            { to: 'e', from: '[ÈÉÊËĒĔĖĘĚẸẺẼẾỀỂỄỆ]' },
            { to: 'g', from: '[ĜĞĢǴ]' },
            { to: 'h', from: '[ĤḦ]' },
            { to: 'i', from: '[ÌÍÎÏĨĪĮİỈỊ]' },
            { to: 'j', from: '[Ĵ]' },
            { to: 'ij', from: '[Ĳ]' },
            { to: 'k', from: '[Ķ]' },
            { to: 'l', from: '[ĹĻĽŁ]' },
            { to: 'm', from: '[Ḿ]' },
            { to: 'n', from: '[ÑŃŅŇ]' },
            { to: 'o', from: '[ÒÓÔÕŌŎŐỌỎỐỒỔỖỘỚỜỞỠỢǪǬƠ]' },
            { to: 'oe', from: '[ŒØÖ]' },
            { to: 'p', from: '[ṕ]' },
            { to: 'r', from: '[ŔŖŘ]' },
            { to: 's', from: '[ßŚŜŞŠȘ]' },
            { to: 't', from: '[ŢŤ]' },
            { to: 'u', from: '[ÙÚÛÜŨŪŬŮŰŲỤỦỨỪỬỮỰƯ]' },
            { to: 'w', from: '[ẂŴẀẄ]' },
            { to: 'x', from: '[ẍ]' },
            { to: 'y', from: '[ÝŶŸỲỴỶỸ]' },
            { to: 'z', from: '[ŹŻŽ]' },
            { to: '-', from: '[·/_,:;\']' }
        ];

        sets.forEach(set => {
            text = text.replace(new RegExp(set.from, 'gi'), set.to)
        });

        return text
            .replace(/\s+/g, '-')
            .replace(/--+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '')
    }

    return (
        <div className="card p-4 mb-4">
            <h2>Convert String To Slug</h2>
            <div className="row">
                <div className="col-6">
                    <div className="form-group">
                        <label htmlFor="number">Text</label>
                        <input type="text" className="form-control" id="number" placeholder="Insert String" onChange={(e) => setNumerals(slugify(e.target.value))} />
                    </div>
                </div>
                <div className="col-6">
                    <div className="form-group">
                        <label htmlFor="roman">Slug</label>
                        <input type="text" className="form-control" id="roman" defaultValue={numeral} />
                    </div>
                </div>
            </div>
        </div>
    )
}