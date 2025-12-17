# Ottilie Rderplacer - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ottilie Rderplacer**

## Example Practitioner: Ottilie Rderplacer

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470

**name**: Ottilie Rderplacer (Official)

**telecom**: [+41 44 333 22 11](tel:+41443332211), [o.rderplacer@happydoctors.ch](mailto:o.rderplacer@happydoctors.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "PractORderplacer",
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
      "family" : "Rderplacer",
      "given" : ["Ottilie"],
      "prefix" : ["Dr. med."],
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
      "value" : "+41 44 333 22 11"
    },
    {
      "system" : "email",
      "value" : "o.rderplacer@happydoctors.ch"
    }
  ]
}

```
