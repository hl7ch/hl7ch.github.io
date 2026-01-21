# Org - Praxis Dr. Hauser - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Org - Praxis Dr. Hauser**

## Example Organization: Org - Praxis Dr. Hauser



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Org-PeterHauser",
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.45",
      "value" : "A74966168"
    }
  ],
  "name" : "Praxis Dr. Hauser",
  "address" : [
    {
      "line" : ["Hauptstrasse 10"],
      "_line" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
              "valueString" : "Hauptstrasse"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
              "valueString" : "10"
            }
          ]
        }
      ],
      "city" : "Solothurn",
      "postalCode" : "4500"
    }
  ]
}

```
