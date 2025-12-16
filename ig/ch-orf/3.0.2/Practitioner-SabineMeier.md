# Sabine Meier - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sabine Meier**

## Example Practitioner: Sabine Meier

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000618627, `urn:oid:2.16.756.5.30.1.123.100.2.1.1`/L248519

**name**: Sabine Meier 

**telecom**: ph: 044 333 22 11, [sabine.meier@praxisseeblick.ch](mailto:sabine.meier@praxisseeblick.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "SabineMeier",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000618627"
    },
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
      "value" : "L248519"
    }
  ],
  "name" : [
    {
      "family" : "Meier",
      "given" : ["Sabine"],
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
      "value" : "044 333 22 11"
    },
    {
      "system" : "email",
      "value" : "sabine.meier@praxisseeblick.ch"
    }
  ]
}

```
