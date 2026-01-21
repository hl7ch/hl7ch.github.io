# Org: Orderer with BER and UIDB - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Org: Orderer with BER and UIDB**

## Example Organization: Org: Orderer with BER and UIDB



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Organization-OrdererWithBERUIDB",
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.35",
      "value" : "CHE109322551"
    },
    {
      "system" : "urn:oid:2.16.756.5.45",
      "value" : "A62088168"
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
