# Org - Hôpital régional soleil - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Org - Hôpital régional soleil**

## Example Organization: Org - Hôpital régional soleil

**CH ELM Extension: Department**: Médecine interne

**identifier**: `urn:oid:2.16.756.5.45`/A99086638

**name**: Hôpital régional soleil

**address**: Rue des alpes 35 Genève 1202 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Org-JeanneMoreau",
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department",
      "valueString" : "Médecine interne"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.45",
      "value" : "A99086638"
    }
  ],
  "name" : "Hôpital régional soleil",
  "address" : [
    {
      "line" : ["Rue des alpes 35"],
      "_line" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
              "valueString" : "Rue des alpes"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
              "valueString" : "35"
            }
          ]
        }
      ],
      "city" : "Genève",
      "postalCode" : "1202"
    }
  ]
}

```
