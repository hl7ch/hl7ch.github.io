# Kurt Nowit-All - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kurt Nowit-All**

## Example Practitioner: Kurt Nowit-All

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470

**name**: Kurt Nowit-All (Official)

**telecom**: [+41 44 412 00 98](tel:+41444120098), [s.nowit-all@OrthoHappyHospital.ch](mailto:s.nowit-all@OrthoHappyHospital.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "PractKNowit-All",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601002331470"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Nowit-All",
      "given" : ["Kurt"],
      "prefix" : ["Prof. Dr. med."],
      "_prefix" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
              "valueCode" : "AC"
            }
          ]
        }
      ]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 44 412 00 98"
    },
    {
      "system" : "email",
      "value" : "s.nowit-all@OrthoHappyHospital.ch"
    }
  ]
}

```
