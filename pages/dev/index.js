import { useState } from "react";

export default function DevIndex() {
    const [text, setText] = useState('test');

    return (
        <>
            <input type="text" onChange={(e) => setText(e.target.value)} />
            <div>{ text }</div>
        </>
    );
}