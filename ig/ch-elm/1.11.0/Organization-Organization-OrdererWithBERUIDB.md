# Org: Orderer with BER and UIDB - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Org: Orderer with BER and UIDB**

## Example Organization: Org: Orderer with BER and UIDB

**identifier**: `urn:oid:2.16.756.5.35`/CHE109322551, `urn:oid:2.16.756.5.45`/A62088168

**name**: Praxis Dr. Hauser

**address**: Hauptstrasse 10 Solothurn 4500 



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
