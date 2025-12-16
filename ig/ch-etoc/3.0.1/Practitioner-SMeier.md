# Sabine Meier - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sabine Meier**

## Example Practitioner: Sabine Meier

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234322

**name**: Sabine Meier (Official)

**telecom**: [+41 44 333 13 15](tel:+41443331315), [s.meier@praxisseeblick.ch](mailto:s.meier@praxisseeblick.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "SMeier",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000234322"
    }
  ],
  "name" : [
    {
      "use" : "official",
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
      "value" : "+41 44 333 13 15"
    },
    {
      "system" : "email",
      "value" : "s.meier@praxisseeblick.ch"
    }
  ]
}

```
