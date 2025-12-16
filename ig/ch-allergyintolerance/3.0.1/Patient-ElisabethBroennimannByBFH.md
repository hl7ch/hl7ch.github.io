# ElisabethBroennimannByBFH - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElisabethBroennimannByBFH**

## Example Patient: ElisabethBroennimannByBFH

**id**: ElisabethBroennimannByBFH

**meta**:

**name**: Elisabeth Brönnimann-Bertholet

**telecom**: ph: +41 32 321 61 11(HOME), elisabeth@broennimann.today

**gender**: FEMALE

**birthDate**: May 3, 1937

**address**: Kreuzweg 11 Biel/Bienne 2500 (HOME)

**maritalStatus**: verheiratet (Details : {http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus code '2' = '2', given as 'verheiratet'}; {http://terminology.hl7.org/CodeSystem/v3-MaritalStatus code 'M' = 'Married', given as 'married'})



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ElisabethBroennimannByBFH",
  "meta" : {
    "source" : "https://www.ti.bfh.ch/de/bachelor/medizininformatik.html",
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "name" : [
    {
      "family" : "Brönnimann-Bertholet",
      "given" : ["Elisabeth"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 32 321 61 11",
      "use" : "home"
    },
    {
      "system" : "email",
      "value" : "elisabeth@broennimann.today"
    }
  ],
  "gender" : "female",
  "birthDate" : "1937-05-03",
  "address" : [
    {
      "use" : "home",
      "line" : ["Kreuzweg 11"],
      "city" : "Biel/Bienne",
      "postalCode" : "2500"
    }
  ],
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
        "code" : "2",
        "display" : "verheiratet"
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-MaritalStatus",
        "code" : "M",
        "display" : "married"
      }
    ]
  },
  "generalPractitioner" : [
    {
      "reference" : "Practitioner/AgparMarc"
    }
  ]
}

```
