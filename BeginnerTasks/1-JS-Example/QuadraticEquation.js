function solveQuadratic(a, b, c) {
    
    console.log(`${a}x^2 + ${b}x + ${c} = 0`);

    // a = 0
    if (a === 0) {
        if (b === 0) {
            if (c === 0) {
                console.log("Уравнение 0=0");
            } else {
                console.log("Нет решений");
            }
        } else {
            // bx + c = 0
            const root = -c / b;
            console.log(`Линейное уравнение, корень x = ${root}`);
        }
        return;
    }

    // Дискриминант
    const D = b * b - 4 * a * c;

    if (D > 0) {
        // Два разных корня
        const sqrtD = Math.sqrt(D);
        const x1 = (-b + sqrtD) / (2 * a);
        const x2 = (-b - sqrtD) / (2 * a);
        console.log(`Два корня: x1 = ${x1}, x2 = ${x2}`);
    } else if (D === 0) {
        // Один корень
        const x = -b / (2 * a);
        console.log(`Один корень: x = ${x}`);
    } else {
        // Нет решений
        console.log("Решений нет (D < 0)");
    }
}

solveQuadratic(1, -3, 2);
solveQuadratic(1, 2, 1);
solveQuadratic(0, 2, -8);
solveQuadratic(0, 0, 0);
solveQuadratic(1, 0, 1);