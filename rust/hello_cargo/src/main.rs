struct Car {
    color: String,
    transmission: Transmission,
    convertible: bool,
    mileage: u32
}

#[derive(PartialEq, Debug)]
enum Transmission {
    Manual,
    SemiAuto,
    Automatic
}

fn main() {

    let _car = car_factory(String::from("azul"), Transmission::Automatic, true);
    println!("el auto de color {} es de transmisión {} y es convertible {}", _car.color, _car.transmission, _car.convertible);
}

fn car_factory(color: String, transmission: Transmission, convertible: bool) -> Car {
    let car = Car {color: color, transmission: transmission,convertible: convertible, mileage: 0};
    car
}