# Otto Rderfiller - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Otto Rderfiller**

## Example Practitioner: Otto Rderfiller

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000618627

**name**: Otto Rderfiller (Official)

**telecom**: [+41 44 412 00 99](tel:+41444120099), [o.rderfiller@OrgRadHappyHospital.ch](mailto:o.rderfiller@OrgRadHappyHospital.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "PractORderfiller",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000618627"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Rderfiller",
      "given" : ["Otto"],
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
      "value" : "+41 44 412 00 99"
    },
    {
      "system" : "email",
      "value" : "o.rderfiller@OrgRadHappyHospital.ch"
    }
  ]
}

```
