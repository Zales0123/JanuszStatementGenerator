package main

import (
    "encoding/json"
    "fmt"
    "io/ioutil"
    "log"
    "math/rand"
    "time"
)

func main() {
    type Data struct {
        Introductions []string
        Who []string
        How []string
        What []string
        Why []string
        Culminations []string
    }

    rand.Seed(time.Now().Unix())
    content, err := ioutil.ReadFile("./data.json")
    var payload Data
    err = json.Unmarshal(content, &payload)

    if err != nil {
        log.Fatal("Error during Unmarshal(): ", err)
    }

    fmt.Printf(
        "%s%s%s%s%s%s",
        getRandomElement(payload.Introductions),
        getRandomElement(payload.Who),
        getRandomElement(payload.How),
        getRandomElement(payload.What),
        getRandomElement(payload.Why),
        getRandomElement(payload.Culminations),
    )
}

func getRandomElement(elements []string) string {
    randomIndex := rand.Intn(len(elements))
    pick := elements[randomIndex]

    return pick
}
