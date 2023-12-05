import { useState } from "react";

export default function DevIndex() {
    const [text, setText] = useState('test');
    const [time, setTime] = useState(0);

    const fetchTime = async () => {
        const res = await fetch('/api/time');
        const json = await res.json();
        setTime(json.time);
    };

    return (
        <>
            <input type="text" onChange={(e) => setText(e.target.value)} />
            <div>{ text }</div>
            <button onClick={() => fetchTime()}>API</button>
            <div>{ time }</div>
        </>
    );
}