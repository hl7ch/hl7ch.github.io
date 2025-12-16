# Allzeit Bereit - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Allzeit Bereit**

## Example Practitioner: Allzeit Bereit

Profiles: [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md), [CH Core Practitioner EPR](StructureDefinition-ch-core-practitioner-epr.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000201041

**name**: Allzeit Bereit (Official)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "AllzeitBereit",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000201041"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Bereit",
      "given" : ["Allzeit"],
      "prefix" : ["Herr", "Dr. med.", "Allg. Gruppenpraxis AG"],
      "_prefix" : [
        null,
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
              "valueCode" : "AC"
            }
          ]
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
              "valueCode" : "LS"
            }
          ]
        }
      ],
      "suffix" : ["Facharzt für Allgemeine Medizin"]
    }
  ]
}

```
