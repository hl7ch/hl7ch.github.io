# Hanspeter Wenger by BFH - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hanspeter Wenger by BFH**

## Example Practitioner: Hanspeter Wenger by BFH

Information Source: [https://www.bfh.ch/de/studium/bachelor/medizininformatik/](https://www.bfh.ch/de/studium/bachelor/medizininformatik/)

Profile: [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000050717, `urn:oid:2.16.756.5.30.1.123.100.2.1.1`/L248519

**name**: Hanspeter Wenger 

**gender**: Male

**birthDate**: 1965-12-13



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "HanspeterWengerByBFH",
  "meta" : {
    "source" : "https://www.bfh.ch/de/studium/bachelor/medizininformatik/",
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000050717"
    },
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
      "value" : "L248519"
    }
  ],
  "name" : [
    {
      "family" : "Wenger",
      "given" : ["Hanspeter"],
      "prefix" : ["Herr", "Dr. med."],
      "_prefix" : [
        null,
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
  "gender" : "male",
  "birthDate" : "1965-12-13"
}

```
