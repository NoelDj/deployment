import React, { useState } from 'react';

export default function Numerals(props) {
    const [numeral, setNumerals] = useState('I');

    function romanize(num) {
        if (isNaN(num)) return NaN

        const digits = String(+num).split("")
        const key = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM",
            "", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC",
            "", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"
        ]
        let roman = ""
        let i = 3;
        while (i--)
            roman = (key[+digits.pop() + (i * 10)] || "") + roman;
        return Array(+digits.join("") + 1).join("M") + roman;
    }

    return (
        <div className="card p-4 mb-4">
            <h2>Convert numbers to roman numbers</h2>
            <div className="row">
                <div className="col-6">
                    <div className="form-group">
                        <label htmlFor="number">Number</label>
                        <input type="number" className="form-control" id="number" placeholder="Insert Number" min="1" defaultValue={1} onChange={(e) => setNumerals(romanize(e.target.value))} />
                    </div>
                </div>
                <div className="col-6">
                    <div className="form-group">
                        <label htmlFor="roman">Roman</label>
                        <input type="text" className="form-control" id="roman" defaultValue={numeral} />
                    </div>
                </div>
            </div>
        </div>
    )
}